# Trabalho de conclusão de curso tecnolgo em analise e desenvolvimento de sistema

## Instituto Federal de Goiás (IFG)
# Proposta do trabalho 

 O sistema foi desenvolvido para ser usado dentro de uma unidade básica de saúde, para que facilite o trabalho dos tecnicos de enfermagem que são responsáveis pela sala de vacina.

## Nome do banco de dados
carvavi
## Criação de Tabela(s)
### ADMINISTRADOR
```sql
CREATE TABLE administrador (
                id_administrador integer AUTO_INCREMENT NOT NULL PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                usuario VARCHAR(255) NOT NULL,
                senha VARCHAR (255) NOT NULL)ENGINE=InnoDB;
```
### UNIDADE DE SAÚDE 
```sql
CREATE TABLE unidade_de_saude (
                id_unidade INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
                nome VARCHAR (255) NOT NULL,
                rua VARCHAR (255) NOT NULL,
                numero VARCHAR(255) NOT NULL,
                bairro VARCHAR(255) NOT NULL,
                cidade VARCHAR(255) NOT NULL,
                estado VARCHAR(255) NOT NULL,
                cep VARCHAR(255) NOT NULL,
                numero_unidade INTEGER (255) NOT NULL)ENGINE=InnoDB;
```

### FUNCIONARIO 
```sql
CREATE TABLE funcionario (
                id_funcionario INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
                nome VARCHAR (255) NOT NULL,
                cpf VARCHAR (255)NOT NULL,
                rg VARCHAR (255)NOT NULL,
                telefone VARCHAR(255) NOT NULL,
                data_nascimento DATE NOT NULL,
                rua VARCHAR (255) NOT NULL,
                numero VARCHAR (255) NOT NULL,
                bairro VARCHAR (255)NOT NULL,
                cidade VARCHAR (255) NOT NULL,
                estado VARCHAR (255)NOT NULL,
                cep VARCHAR(255) NOT NULL,
                cargo VARCHAR (255) NOT NULL,
                email VARCHAR (255) NOT NULL,
                usuario VARCHAR (255)NOT NULL,
                senha VARCHAR(255) NOT NULL,
                id_unidade INTEGER NOT NULL,
    FOREIGN KEY (id_unidade) REFERENCES unidade_de_saude(id_unidade))ENGINE=InnoDB;
```

### VACINA
```sql
CREATE TABLE vacina (
                id_vacina INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
                nome_vacina VARCHAR (255) NOT NULL,
                lote_vacina VARCHAR (255) NOT NULL,
                quantidade VARCHAR (255)NOT NULL,
                data_fabricacao DATE  NOT NULL,
                data_validade DATE  NOT NULL,
                laboratorio_vacina VARCHAR (255) NOT NULL,
    			id_funcionario INTEGER NOT NULL,
    FOREIGN KEY (id_funcionario) REFERENCES funcionario(id_funcionario))ENGINE=InnoDB;
```
### PACIENTE
```sql
CREATE TABLE paciente (
                id_paciente INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
                nome_paciente VARCHAR (255) NOT NULL,
                cpf VARCHAR (255) NOT NULL,
                rg VARCHAR (255) NOT NULL,
                sus VARCHAR (255) NOT NULL,
                nascimento DATE  NOT NULL,
                rua VARCHAR (255) NOT NULL,
                numero VARCHAR (255) NOT NULL,
                bairro VARCHAR (255) NOT NULL,
                cidade VARCHAR (255) NOT NULL,
                estado VARCHAR (255) NOT NULL,
                cep VARCHAR (255) NOT NULL,
                telefone VARCHAR (255) NOT NULL,
                email VARCHAR (255) NOT NULL,
                usuario VARCHAR (255) NOT NULL,
                senha VARCHAR (255) NOT NULL,
    			id_funcionario INTEGER NOT NULL,
              FOREIGN KEY (id_funcionario) REFERENCES funcionario(id_funcionario))ENGINE=InnoDB;
```
### VACINAS APLICADAS
```sql
CREATE TABLE vacinas_aplicadas (
                id_vacinas_aplicadas INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
                id_vacina INTEGER NOT NULL,
                id_paciente INTEGER NOT NULL,
                nome VARCHAR (255) NOT NULL,
                lote VARCHAR (255) NOT NULL,
                data_aplicacao DATE  NOT NULL,
                dose INTEGER (255) NOT NULL,
                laboratorio VARCHAR (255) NOT NULL,
    FOREIGN KEY (id_vacina) REFERENCES vacina(id_vacina),
    FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente))ENGINE=InnoDB;
```

### CONTROLE DE VACINAS
```sql
CREATE TABLE controle_vacinas(
                id_controle_vacinas INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    			id_vacina INTEGER NOT NULL,
    			id_vacinas_aplicadas INTEGER NOT NULL,
     FOREIGN KEY (id_vacina) REFERENCES vacina(id_vacina),
      FOREIGN KEY (id_vacinas_aplicadas) REFERENCES vacinas_aplicadas(id_vacinas_aplicadas))ENGINE=InnoDB;
```
### CARTÃO DE VACINA
```sql
CREATE TABLE cartao_de_vacina (
                id_cartao INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    			id_vacinas_aplicadas INTEGER NOT NULL,
    			id_paciente INTEGER NOT NULL,
    			FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente),
                FOREIGN KEY (id_vacinas_aplicadas) REFERENCES vacinas_aplicadas(id_vacinas_aplicadas)
)ENGINE=InnoDB;
```
### PARA ABRIR O SISTEMA 

http://localhost/carvavi/index.php

