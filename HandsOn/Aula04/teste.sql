SELECT a.nome,a.email,c.nome,p.descricao
FROM tb_alunos AS a
INNER JOIN tb_matriculas AS m
ON a.id = m.aluno_id
INNER JOIN tb_turmas AS t
ON m.turma_id = t.id
INNER JOIN tb_cursos AS c
ON t.curso_id = c.id
INNER JOIN tb_periodos AS p
ON t.periodo_id = p.id