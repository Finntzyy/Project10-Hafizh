Create Table tb_golongan (
    gol_id tinyint (3) NOT NULL AUTO_INCREMENT,
    gol_kode VARCHAR (10) NOT NULL,
    gol_nama VARCHAR (50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT NULL,
    PRIMARY KEY (gol_id)
);


CREATE Table tb_users (
    user_id INT (11) NOT NULL AUTO_INCREMENT,
    user_email VARCHAR (50) NOT NULL,
    user_password VARCHAR (100) NOT NULL,
    user_nama VARCHAR (100) NOT NULL,
    user_alamat TEXT NOT NULL,
    user_hp VARCHAR (25) NOT NULL,
    user_pos VARCHAR (5),
    user_role tinyint (2),
    user_aktif tinyint (2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT NULL,
    PRIMARY KEY (user_id),  
    UNIQUE KEY (user_email)  
);

CREATE TABLE tb_pelanggan (
    pel_id INT (11) NOT NULL AUTO_INCREMENT,
    pel_id_gol tinyint (3) NOT NULL,
    pel_no VARCHAR (20) NOT NULL,
    pel_nama VARCHAR (50) NOT NULL,
    pel_alamat TEXT NOT NULL,
    pel_hp VARCHAR (20) NOT NULL,
    pel_ktp VARCHAR (50) NOT NULL,
    pel_seri VARCHAR (50) NOT NULL,
    pel_meteran INT (11) NOT NULL,
    pel_aktif ENUM ('Y','N'),
    pel_id_user INT (11) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT NULL,
    PRIMARY KEY (pel_id),
    UNIQUE KEY (pel_ktp),
    FOREIGN KEY (pel_id_gol) references tb_golongan (gol_id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (pel_id_user) REFERENCES tb_users (user_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

INSERT INTO 
    tb_users 
 VALUES (
    1, 
    'hafiz@gmail.com',
    '*3FDAA53EF5C16A2E300D7FC087D32BB71F0584F2',
    'Hafizh Prayoga',
    'Jl. menuju kesuksesan',
    '08123879465',
    '20123',
    '2',
    '1',
    '2023-11-30 03:49:22',
    NULL
 );
