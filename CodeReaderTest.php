<?php

require_once('Program.php');
require_once('Statement.php');
require_once('CodeReader.php');
require_once('CompilerStructure.php');
require_once('Compiler.php');
require_once('QueryCompiler.php');
require_once('PrologCompiler.php');
require_once('WAM.php');
/*
  $p = CodeReader::readProgram('fixtures_test.wam');
  echo $p;
  echo "\n";
 */
/*
$c = new QueryCompiler(new WAM());
$p = $c->compile("pere(X, luke).");

echo $p;*/

$c = new PrologCompiler(new WAM(new Program()));
$p = $c->compileFile('debug.pro');
//$p = $c->compile("not(Call) :- call(Call), !, fail. not(Call).");

echo $p."\n";