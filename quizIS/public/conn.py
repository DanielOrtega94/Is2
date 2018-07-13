import MySQLdb
import configparser

config = configparser.ConfigParser()

config.read('config.ini')
db = config['DB']


db = MySQLdb.connect(host=config['DB']['host'],
 					user=config['DB']['user'],
 					passwd=config['DB']['password'],
 					db=config['DB']['database'])

class Querist:
	def __init__(self, db):
		self.cursor = db.cursor()

	def selectStar(self, table):
		self.cursor.execute('select * from {}'.format(table))
		return self.cursor.fetchall()

	def execute(self, query):
		self.cursor.execute(query)
		return self.cursor.fetchall()

	def selectColumn(self, table, columns):
		columnString = ''
		for col in columns:
			columnString += col
			if col is columns[-1]:
				continue
			columnString += ', '
		#print 'select {} from {}'.format(columnString, table)
		self.cursor.execute('select {} from {}'.format(columnString, table))
		return self.cursor.fetchall()

	def close(self):
		db.close()

def getQuerist():
	return Querist(db)

