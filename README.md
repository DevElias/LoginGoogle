Configuração Console Google
=============
1. Crie um Projeto no [Google Console](https://console.developers.google.com/?hl=es-419)

![](https://i.imgur.com/Xeu2V4J.jpg)

2. Configure as Credencias do Projeto:

![](https://i.imgur.com/LQAMEPW.jpg)

3. Primeiro passo é ir na Opção ID do Cliente OAuth:

![](https://i.imgur.com/K8EDa6X.jpg)

4. Informar o Tipo da Sua Aplicação, o nome da Credencial e a URL de retorno para onde o Google irá apontar após a Autenticação.

![](https://i.imgur.com/q1O5r4L.jpg)

5. Após isso, o Google irá gerar um ID do Cliente e um ID Secreto para sua Aplicação. (Guarde essas informações)

![](https://i.imgur.com/Sh95L5b.jpg)

6. Para Concluir essa etapa da configuração no Console do Google, teremos que buscar na Biblioteca de API's o GMail API e Ativar essa opção.

![](https://i.imgur.com/OC2vVO4.jpg)

Configuração Projeto API Login Google (PHP)
=============
* Após concluir a primeira etapa conigurando o console do Google, iremos fazer algumas modificações no fonte do nosso PHP.

7. Abra o arquivo **google_auth** que esta dentro do diretório: **\app\classes** para alterar as seguintes linhas:

```php
$this->client->setClientID('Insert here ID Client');
$this->client->setClientSecret('Insert here ID Secret');
$this->client->setRedirectUri('Insert here URL Redirect');
```

8. Insira as informções que o Googe te forneceu na Imagem 5.
 * ID do Cliente
 * Chave Secreta
 * URL de Retorno (Neste exemplo aponte a URL de Retorno para a página index.php)
 
 Observações:
 ===========
 
* Caso necessitar de ajuda com este Código fonte, podem me contactar no eliasv.lima@yahoo.com.br

Um Abraço.
