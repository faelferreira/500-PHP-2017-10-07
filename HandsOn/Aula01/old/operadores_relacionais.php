<?php 

/*

Operadores relacionais são usados para comparar valores ou expressões, retor-
nando um valor booleano (true ou false). São eles:
• Igual: ==
• Idêntico: ===
• Diferente: != ou <>
• Menor que: <
• Maior que: >
• Menor ou igual: <=
• Maior ou igual: >=
Devido a tipagem dinâmica do PHP, você deve tomar alguns cuidados quando es-
tiver criando expressões lógicas envolvendo valores booleanos. Se você fizer uma
comparação utilizando o operador ==, o número inteiro 0 será igual ao booleano
false, assim como NULL e uma string vazia. Isso pode não trazer bons resultados.
Portanto, utilize sempre o operador ===, que checará não somente o conteúdo da
variável, e sim, o tipo dela.

*/