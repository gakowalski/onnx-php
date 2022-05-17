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
