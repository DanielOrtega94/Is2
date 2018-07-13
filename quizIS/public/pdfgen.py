# -*- coding: utf-8 -*-

import reportlab.lib, reportlab.platypus
from reportlab.lib import colors
from reportlab.lib.enums import TA_CENTER
from reportlab.pdfgen.canvas import Canvas
from reportlab.lib.pagesizes import letter, landscape
from reportlab.lib.units import cm, mm, inch, pica
from reportlab.platypus import Flowable, Paragraph, SimpleDocTemplate, Spacer, Image, Table, TableStyle
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
import datetime
import argparse
import ast

parser = argparse.ArgumentParser(description='This is a program that generates PDF reports from a database.')
parser.add_argument('--tablename', action='store', dest='tablename')
parser.add_argument('--colnames', action='store', dest='colnames')

import conn



style = getSampleStyleSheet()

im = reportlab.lib.utils.ImageReader('aceleraBlack.jpg')
iw, ih = im.getSize()


defaultLogo = {'image': im,
				'x':0,
				'y':0,
				'w':iw,
				'h':ih}

page = {}

def initPage(pagesize):
	global page
	page = {'width': pagesize[0],
			'height': pagesize[1],
			'left': -inch*1.05,
			'right': pagesize[0] - inch*1.1,
			'top': inch*1.05,
			'bottom': -pagesize[1] + inch*1.1,
			'lMargin': -inch*0.05,
			'rMargin': pagesize[0] - inch*2.1,
			'tMargin': inch*0.05,
			'bMargin': -pagesize[1] + inch*2.1
			}

class Header(Flowable):
	def __init__(self, logoData = defaultLogo):
		Flowable.__init__(self)
		self.logo = logoData

	def draw(self):
		self.canv.drawImage(self.logo['image'], page['lMargin'], page['tMargin']-self.logo['h'])
		self.canv.drawString(page['rMargin']-80, page['tMargin'], str(datetime.date.today()))
		self.canv.line(page['lMargin'], page['tMargin']-inch*1.2, page['rMargin'], page['tMargin']-inch*1.2)

	def getSpaceAfter(self):
		return 100

def createTable(data, tstyle=[], colWidths=None):
	elements = []
	modata = []
	for row in data:
		#print row,'\n-----------'
		modata.append([])
		for column in row:
			text = column
			#if type(column) is not str:
			#	text = str(column)
			#text = text.encode('utf-8')			
			print type(column)
			if type(column) is str:
				print text.decode('latin1').encode('utf-8')
				fullPara = '<b>'+text.decode('latin1').encode('utf-8')+'</b>'
			else:
				fullPara = '<b>'+str(column)+'</b>'	
			modata[-1].append(Paragraph(str(fullPara), style['Normal']))
	t = Table(modata, colWidths)
	t.setStyle(tstyle)
	elements.append(t)
	return elements

columnSizes = {'id':2*cm,
				'Nombre':3*cm,
				'correo':3.5*cm,
				'direccion':4.5*cm,
				'telefono':3*cm,
				'etapa':2.5*cm,
				'nota':1.5*cm,
				'question_text': 6*cm
				}

columnNames = {'id':'ID',
				'Nombre':'Nombre',
				'correo':'Correo',
				'direccion':u'Dirección'.encode('latin1'),
				'telefono':u'Teléfono'.encode('latin1'),
				'etapa':'Etapa',
				'nota':'Nota',
				'question_text': 'Pregunta'}

def createReport(tableName, columns, reportName=None, nupagesize = letter):
	print tableName
	print columns
	sum = 0
	for column in columns:
		if column in columnSizes:
			sum += columnSizes[column]
		else:
			sum += 3*cm
	print sum, 'vs', nupagesize[0]
	if sum > nupagesize[0]:
		nupagesize = landscape(nupagesize)
	_createReport(tableName, columns, reportName=reportName, nupagesize=nupagesize)



def _createReport(tableName, columns, reportName=None, nupagesize = letter):
	pagesize = nupagesize
	pageWidth, pageHeight = pagesize
	pdf = SimpleDocTemplate('report.pdf', pagesize = pagesize)
	initPage(pagesize)

	cursor = conn.getQuerist()

	data = []
	names = []
	for column in columns:
		if column in columnNames:
			names.append(columnNames[column])
		else:
			names.append(column)
	data.append(tuple(names))
	result = cursor.selectColumn(tableName, columns)
	for row in result:
		data.append(tuple([column for column in row]))
	tstyle = [('INNERGRID', (0,0), (-1,-1), 0.25, colors.black), 
				('BOX', (0,0), (-1,-1), 0.25, colors.black), 
				('BACKGROUND', (0,0), (-1,-1), (0.9, 0.9, 0.9))]

	buildables = []
	buildables.append(Header())
	if reportName is None:
		buildables.append(Paragraph('REPORTE DE {}'.format(tableName.upper()), style['Title']))
	else:
		buildables.append(Paragraph(reportName, style['Title']))
	colWidths = []
	for column in columns:
		if column in columnSizes:
			colWidths.append(columnSizes[column])
		else:
			colWidths.append(3*cm)
	print data
	ttable = createTable(data, tstyle, colWidths=colWidths)
	buildables.extend(ttable)
	pdf.build(buildables)
	cursor.close()


args = parser.parse_args()
#print args.colnames

	
if args.tablename is not None and args.colnames is not None:
	args.colnames = args.colnames.replace('(', '[\'')
	args.colnames = args.colnames.replace(')', '\']')
	args.colnames = args.colnames.replace(',', '\',\'')

	#print args.colnames,args.tablename

	createReport(args.tablename, ast.literal_eval(args.colnames))
	pass
else:
	createReport('empresas', ['id','Nombre', 'correo', 'nota'])