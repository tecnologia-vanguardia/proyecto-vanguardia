let API_KEY = '86ac1da3bdc9f069c3ade05ed6e8c610c6dc6e4ee346aa5f7d214a512aa03764';
let COMPANY_LOGIN = 'sportfishing';

var loginClient = new JSONRpcClient({
	'url': 'https://user-api.simplybook.me' + '/login',
	'onerror': function (error) {},
});
var token = loginClient.getToken(COMPANY_LOGIN, API_KEY);

console.log('token');
console.log(token);
