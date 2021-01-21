# dialog-flow-simple-php-template

1. В Terlegram -> BotFather - регистрируем бота, получаем токен
2. Создаем агента в dialog-flow и настраиваем интеграцию - https://dialogflow.cloud.google.com/#/newAgent
3. Настраиваем Fulfillment https://домен/simple-template.php и токен авторизации
4. Настраиваем интенты
5. Подключаем Fulfillment к интентам
6. Profit!

# actions

$data->queryResult->action

# param url for example

$data->queryResult->parameters->url
