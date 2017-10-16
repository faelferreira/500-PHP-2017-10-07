# Atividades para treinar Arrays, For, Foreach, Funções, etc.

Neste projeto encontra-se alguns arquivos para simularmos um banco de dados e trabalharmos com ele.
A ideia é que você monte funções para trabalhar com as informações geradas.

Estrutura de arquivos:

    - dados/alunos.php;
    - dados/cursos.php;
    - dados/matriculas.php;
    - dados/dados.php;
    
### alunos.php
JSON com 50 pessoas aleatórias geradas pelo site http://www.theonegenerator.com/pt
Este JSON é transformado em um array para trabalharmos com ele no PHP.
No final temos um FOR para colocar os Id's em cada.

#### $aluno
```code
[
        [id] => 1
        [name] => Heath Ledger
        [email] => heathledger@tortor.com
        [cpf] => 64596650950
        [password] => 80dph2sh
        [birthday] => 19/05/1956
        [rg] => 852549829
]
```
### cursos.php
Um array com alguns cursos de exemplo.
Uma Função para gerar um Id aleatório de um dos Cursos.
    - É passado por parametro um número `1` ou `2`
    - IF número == `1` - Cursos entre 500 e 503
    - IF número == `2` - Cursos entre 600 e 602

#### $curso
```code
[
    [500] => Desenvolvimento Web com PHP
]
```
### matriculas.php
Include do arquivo `cursos.php`
FOR para gerar matrículas aleatórias.
#### $matricula
```code
[
    [id] => 1
        [curso_id] => 500
        [aluno_id] => 1
        [notas] => [
                [prova_1] => 0.1
                [prova_2] => 7.7
            ]
        [frequencia] => 10
]
```