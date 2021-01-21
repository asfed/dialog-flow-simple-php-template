<?php

header('Content-Type: application/json');

function _prepare($data) {

    if ($data->queryResult->action == "") {
    }

    return '{"fulfillmentText": "Неверные параметры"}';

}

if (getallheaders()['x-auth-token'] == 'test_token') {

    try {

        $input = file_get_contents('php://input');

        $data = json_decode($input);

        print _prepare($data);

    } catch (Exception $e) {

    }

    print '{"fulfillmentText": "Что-то пошло не так"}';

}
