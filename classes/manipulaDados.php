<?php

include_once("conexao.php");

class manipulaDados extends conexao
{
    protected $sql, $qr, $table, $fields, $dados, $status, $fieldId, $valueId;

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
            $this->status = "Alterado com sucesso!" . $this->sql;
        } else {
            $this->status = "Erro ao alterar a tabela" . $this->table;
        }
    }
    public function delete()
    {
        $this->sql = "DELETE FROM $this->table WHERE $this->fieldId = '$this->valueId'";
        if (self::execSQL($this->sql)) {
            $this->status = "Excluido com sucesso!";
        } else {
            $this->status = "Erro ao excluir a tabela" . $this->table;
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
        $this->sql = "SELECT * FROM administrador WHERE usuario = '$login' and senha = '$password'";
        $this->query = self::execSQL($this->sql);
        $linhas = @mysqli_num_rows($this->qr);
        return $linhas;
    }
    public function validarLoginFuncionario($login, $password)
    {
        $this->sql = "SELECT * FROM funcionario WHERE usuario = '$login' and senha = '$password'";
        $this->query = self::execSQL($this->sql);
        $linhas = @mysqli_num_rows($this->qr);
        return $linhas;
    }
    public function validarLoginPaciente($login, $password)
    {
        $this->sql = "SELECT * FROM paciente WHERE usuario = '$login' and senha = '$password'";
        $this->query = self::execSQL($this->sql);
        $linhas = @mysqli_num_rows($this->qr);
        return $linhas;
    }
    public function getAllByType($status)
    {
        $this->sql = "SELECT * FROM $this->table WHERE status='$status'";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }

    public function pacienteVacinado()
    {
        $this->sql = "SELECT * from paciente INNER JOIN vacinas_aplicadas on paciente.id_paciente = vacinas_aplicadas.id_paciente
                    INNER JOIN vacina ON vacina.id_vacina = vacinas_aplicadas.id_vacina";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }
    public function vacinaAplicada()
    {
        $this->sql = "SELECT * from vacinas_aplicadas INNER JOIN vacina ON vacina.id_vacina = vacinas_aplicadas.id_vacina;";
        $this->query = self::execSQL($this->sql);
        return $this->query;
    }
    
    

}
