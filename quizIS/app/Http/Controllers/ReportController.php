<?php
namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function empresas(){
        return view('empresas.report');
    }

    public function questions(){
        return view('questions.report');
    }

    public function report(Request $request){    

    	$tablename = $request->input('tablename');
    	$colnames = $request->input('colnames');
      

        if (!isset($tablename) and !isset($colnames)){
            $process = new Process('python pdfgen.py');
            $process->run();            
            #exec('python pdfgen.py');
            #return $array;
        }
        else{
            #return 'python pdfgen.py --tablename '.$tablename.' --colnames '.$colnames;
            $process = new Process('python pdfgen.py --tablename '.$tablename.' --colnames \''.$colnames.'\'');
            $process->run();           
            #exec('python pdfgen.py --tablename '.$tablename.' --colnames \''.$colnames.'\'');
            #return $array;
        }


        // executes after the command finishes
        /*if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }*/

        header('Content-type: application/pdf');
        header('Content-Disposition: attachment; filename="report.pdf"');

        readfile('report.pdf');
        unlink('report.pdf');
	}
}
