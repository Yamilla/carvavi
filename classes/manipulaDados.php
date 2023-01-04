<?php

include_once("conexao.php");

class manipulaDados extends conexao
{
    protected $sql, $qr, $table, $fields, $dados, $status, $fieldId, $valueId, $query;

    public function setTable($t)
    {
        $this->table = $t;
    }
    public function setFields($f)
    {
        $this->fields = $f;
    }
    public function setFieldId($fid)
    {
        $this->fieldId = $fid;
    }
    public function setValueId($vid)
    {
        $this->valueId = $vid;
    }

    public function setDados($d)
    {
        $this->dados = $d;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function insert()
    {
        $this->sql = "INSERT INTO $this->table($this->fields) VALUES ($this->dados)";
        if (self::execSQL($this->sql)) {
            $this->status = "Cadastro efetuado com sucesso!";
        } else {
            $this->status = "Erro ao cadastrar";
        }
    }
    public function update()
    {
        $this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldId = '$this->valueId'";
        if (self::execSQL($this->sql)) {
            $this->status = "Alterado com sucesso!";
        } else {
            $this->status = "Erro ao alterar";
        }
    }
    public function delete()
    {
        $this->sql = "DELETE FROM $this->table WHERE $this->fieldId = '$this->valueId'";
        if (self::execSQL($this->sql)) {
            $this->status = "Excluido com sucesso!";
        } else {
            $this->status = "Erro ao excluir";
        }
    }
    public function getAllDataTable()
    {
        $this->sql = "SELECT * FROM $this->table";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }
    public function validarLoginAdmin($login, $password)
    {
        $this->sql = "SELECT * FROM administrador WHERE usuario = '$login'";
        $result = self::execSQL($this->sql);
        $usuario = mysqli_fetch_assoc($result);
        $senha = $usuario["senha"];
        return password_verify(trim($password), $senha);
        
    }
    public function validarLoginFuncionario($login, $password)
    {
        $this->sql = "SELECT * FROM funcionario WHERE usuario = '$login'";
        $result = self::execSQL($this->sql);
        $usuario = mysqli_fetch_assoc($result);
        $senha = $usuario["senha"];
        return password_verify(trim($password), $senha);
    }

    public function validarLoginPaciente($login, $password)
    {
        $this->sql = "SELECT * FROM paciente WHERE usuario = '$login'";
        //$this->query = self::execSQL($this->sql);
        //$linhas = @mysqli_num_rows($this->qr);
        //return $this->query;
        $result = self::execSQL($this->sql);
        $usuario = mysqli_fetch_assoc($result);
        $senha = $usuario["senha"];
        return password_verify(trim($password), $senha);
    }
    public function getById($id_paciente)
    {
        $this->sql = "SELECT * FROM $this->table WHERE id_paciente='$id_paciente'";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }

    public function vacinasAplicadas($id_paciente)
    {
        $this->sql = "SELECT * from vacinas_aplicadas
        INNER JOIN paciente on paciente.id_paciente = vacinas_aplicadas.id_paciente 
        INNER JOIN descricao_vacina ON descricao_vacina.id_descricao_vacina = vacinas_aplicadas.id_descricao_vacina
        INNER JOIN vacina ON vacina.id_vacina = descricao_vacina.id_vacina
        WHERE vacinas_aplicadas.id_paciente = '$id_paciente'";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }
    public function cartaoVacina($id_paciente)
    {
        $this->sql = "SELECT * from vacinas_aplicadas
        INNER JOIN paciente on paciente.id_paciente = vacinas_aplicadas.id_paciente 
        INNER JOIN descricao_vacina ON descricao_vacina.id_descricao_vacina = vacinas_aplicadas.id_descricao_vacina
        INNER JOIN vacina ON vacina.id_vacina = descricao_vacina.id_vacina
        INNER JOIN funcionario ON vacinas_aplicadas.id_funcionario = funcionario.id_funcionario
        INNER JOIN unidade_de_saude ON funcionario.id_unidade = unidade_de_saude.id_unidade
        WHERE vacinas_aplicadas.id_paciente = '$id_paciente'";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }

    public function visualizarVacina($id_vacina)
    {
        $this->sql = "SELECT * from descricao_vacina INNER JOIN vacina on vacina.id_vacina = descricao_vacina.id_vacina WHERE  descricao_vacina.id_vacina = '$id_vacina' AND descricao_vacina.quantidade > 0";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }

    public function escolhaVacina()
    {
        $this->sql = "SELECT * from descricao_vacina INNER JOIN vacina on vacina.id_vacina = descricao_vacina.id_vacina AND descricao_vacina.quantidade > 0";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }

    public function updateQuantidade()
    {
        $this->sql = "UPDATE descricao_vacina SET quantidade = quantidade - 1 ";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }

    public function updateSenhaAdmin($login, $senha)
    {
        $this->sql = "UPDATE administrador SET senha = '$senha' WHERE usuario = '$login'";
        if (self::execSQL($this->sql)) {
            $this->status = "Senha alterada com sucesso!";
        } else {
            $this->status = "Erro ao alterar";
        }
    }

    public function mostrarDadosPessoais($login)
    {
        $this->sql = "SELECT * FROM $this->table WHERE usuario='$login'";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }

}
