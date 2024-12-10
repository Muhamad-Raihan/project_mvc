<?php

require_once 'ConnectDB.php';

class Contact extends ConnectDB {

	public function getAllContacts() {
		return $this->conn->query("SELECT * FROM contacts")->fetchAll();
	}

	public function getContact($id) {
		$query = $this->conn->prepare("SELECT * FROM contacts WHERE id=?");
		$query->execute( array($id) );
		return $query->fetch();
	}

	public function add($post)
	{
		$query = $this->conn->prepare("INSERT INTO contacts (nama, telepon, email, alamat) VALUES (?,?,?,?)");
		$query->execute( array($post['nama'],$post['telepon'],$post['email'],$post['alamat']) );
		return $query->rowCount();
	}

	public function edit($post,$id)
	
	{
		$query = $this->conn->prepare("UPDATE contacts SET nama=?,telepon=?,email=?,alamat=? WHERE id=?");
		$query->execute( array($post['nama'],$post['telepon'],$post['email'],$post['alamat'],$id) );
		return $query->rowCount();
	}

	public function delete($id)
	{
		$query = $this->conn->prepare("DELETE FROM contacts WHERE id = ?");
		$query->execute( array($id) );
		return $query->rowCount();
	}
}