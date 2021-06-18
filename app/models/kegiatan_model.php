<?php

class Kegiatan_model {
    private $table = 'kegiatan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

public function getAllKegiatan(){
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
}
public function carikegiatan($id){
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idkegiatan = :id');
    $this->db->bind('id',$id);
    return $this->db->single();
}

public function tambahDataKegiatan($data)
{
    $query = "INSERT INTO kegiatan VALUES (:nama, :dana, :progress, :dokumentasi, :id )";
    $this->db->query($query);
    $this->db->bind('nama',$data['namaKegiatan']);
    $this->db->bind('dana',$data['totalDana']);
    $this->db->bind('progress',$data['progress']);
    $this->db->bind('dokumentasi',$data['dokumentasi']);
    $this->db->bind('id',null);

    $this->db->execute();

    return $this->db->rowCount();

}

public function ubahDataKegiatan($data)
{
    $query = "UPDATE kegiatan SET nama = :nama, dana= :dana, progress= :progress, dokumentasi= :dokumentasi WHERE idkegiatan = :id";
    $this->db->query($query);
    $this->db->bind('nama',$data['nama']);
    $this->db->bind('dana',$data['dana']);
    $this->db->bind('progress',$data['progress2']);
    $this->db->bind('dokumentasi',$data['dokumentasi2']);
    $this->db->bind('id',$data['id']);

    $this->db->execute();

    return $this->db->rowCount();
}

public function hapusDataKegiatan($id){
    $this->db->query('DELETE FROM kegiatan WHERE idkegiatan = :id');
    $this->db->bind('id',$id);
    
    $this->db->execute();

    return $this->db->rowCount();
}

}