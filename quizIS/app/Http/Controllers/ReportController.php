<?php
namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request){    

    	$tablename = $request->input('tablename');
    	$colnames = $request->input('colnames');
      

        if (!isset($tablename) and !isset($colnames)){
                
            exec('python2 ./pdfgen.py');
        }
        else{
            $resultados=[];
            $arg = 'python2 ./pdfgen.py --tablename '.$tablename.' --colnames \''.$colnames.'\'';   
           echo $arg;
           $arg1='python2 ./pdfgen.py';
           exec($arg,$resultados);
           //echo $resultados; 
           return $resultados;
           #return 'python2 ./pdfgen.py --tablename '.$tablename.' --colnames \''.$colnames.'\'';
        
                    
        }
    

/*
    	if (!isset($tablename) and !isset($colnames)){
    		$process = new Process('python2');
            $process->run();         
    	}
    	else{
		    $process = new Process('python2 pdfgen.py --tablename '.$tablename.' --colnames \''.$colnames.'\'');
		    $process->run();    		
    	}
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
*/

	    header('Content-type: application/pdf');
	    header('Content-Disposition: attachment; filename="report.pdf"');

	    readfile('report.pdf');
        unlink('report.pdf');
	}
}
