<?php
foreach (range(1, 100) as $i) {
if ( $i % 3 === 0 && $i % 5 === 0 ) {
echo "Chisloto e $i - ";
echo 'FooBar';
echo "\n";
}
if ( $i % 3 === 0 ) {
echo "Chisloto e $i - ";
echo 'Foo';
echo "\n";
}
if ( $i % 5 === 0 ) {
echo "Chisloto e $i - ";
echo 'Bar';
echo "\n";
} 
}
