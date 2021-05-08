<?php 
require 'config.php';
$pdo=config::getConnexion();
try {
    $query=$pdo->prepare (
        'INSERT INTO albums (title,artist,id,genre,release_date, number_of_songs, length)
        VALUES(:title,:artist,:id,:genre,:release,:nb,:length)'
    );
    $query->execute([
        'title' => 'test',
        'artist' => 'tttt',
        'id' => 222,
        'genre' => 'rock',
        'release' => '2021-05-04',
        'nb' => 0,
        'length' => 0

    ]
        
    );

} catch (PDOException $e) {
    $e->getMessage();
}
?>