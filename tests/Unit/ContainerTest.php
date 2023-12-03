<?php

test('it can resolve something out of container', function () {
    $container = new \Core\Container();

    $container->bind('foo', fn()=>'bar');
    
    $result = $container-> resolve('foo');

expect($result)->toEqual('bar');
});
