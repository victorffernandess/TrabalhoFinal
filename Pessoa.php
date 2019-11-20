<?php
	class Pessoa{
		$nome
		$email
		$idade

		public __construct()
		{
			echo "Nome: ".$nome." Email: ".$email." idade: ".$idade;
		}

		public setNome($newval)
		{
			$this->$nome = $newval;
		}

		public getNome()
		{
			return $this->$nome;
		}

		public setEmail($newval)
		{
			$this->$email = $newval;
		}

		public getEmail()
		{
			return $this->$email;
		}

		public setIdade($newval)
		{
			$this->$idade = $newval;
		}

		public getIdade()
		{
			return $this->$idade;
		}
	}