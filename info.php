<?php

require 'vendor/autoload.php';

if (count($argv) <= 1 || $argv[1] == '--help') {
	die("\n\tUsage: {$argv[0]} model.onnx\n");
}

$model_file = $argv[1];

if (file_exists($model_file) === false) {
	die("File $model_file does not exist \n");
}

$file_data = file_get_contents($model_file);
$file_size = strlen($file_data);
echo "File size: $file_size bytes\n";

$input_stream = new \Google\Protobuf\Internal\CodedInputStream($file_data);
if (strlen($file_data) > (32 << 20) && method_exists($input_stream, 'setTotalBytesLimit')) {
	echo "File size exceeeds default buffer limits. Changing limits to $file_size bytes.";
	$input_stream->setTotalBytesLimit($file_size);
} else {
	echo "Can't process files of size greater than 32 MB with this version of google/protobuf library\n";
	echo "You can try manually patching with contents of this commit: https://github.com/protocolbuffers/protobuf/commit/7ac02a13375ef8082b6f3d40439985508330af66";
	exit;
}

$model = new \Onnx\ModelProto;
$model->parseFromStream($input_stream);

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
