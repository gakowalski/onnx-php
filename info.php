<?php

require 'vendor/autoload.php';

if (count($argv) <= 1 || $argv[1] == '--help') {
	die("\n\tUsage: {$argv[0]} model.onnx\n");
}

$model_file = $argv[1];

if (file_exists($model_file) === false) {
	die("File $model_file does not exist \n");
}

$model = new \Onnx\ModelProto;
$model->mergeFromString(file_get_contents($model_file));

$basic_info = [
  'IrVersion',
  'ProducerName',
  'ProducerVersion',
  'Domain',
  'ModelVersion',
  'DocString',
];

echo "File: $model_file\n";
foreach ($basic_info as $attr) {
  $method = "get$attr";
  $value = $model->$method() ?? '(empty)';
  echo "$attr: $value\n";
}

foreach ($model->getOpSetImport() as $opset) {
  $name = $opset->getDomain();
  $version = $opset->getVersion();
  echo "Operator set '$name' version $version\n";
}

foreach ($model->getMetadataProps() as $metadata) {
  var_dump($metadata);
}

foreach ($model->getFunctions() as $function) {
  $name = $function->getName();
  echo "Function: $name\n";
}

if ($model->hasGraph() == false) {
  die('No graph data');
}

$graph = $model->getGraph();

foreach ($graph->getInput() as $input) {
  $name = $input->getName();
  $doc_string = $input->getDocString();
  echo "Input '$name' described as '$doc_string'\n";
}

foreach ($graph->getOutput() as $input) {
  $name = $input->getName();
  $doc_string = $input->getDocString();
  echo "Output '$name' described as '$doc_string'\n";
}

foreach ($graph->getValueInfo() as $input) {
  $name = $input->getName();
  $doc_string = $input->getDocString();
  echo "Value '$name' described as '$doc_string'\n";
}

