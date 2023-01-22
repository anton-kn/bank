Восстановление Backup
1. файл bank с помощью pgAdmin
2. файл bank.tar.gz через консоль, введя комманду
pg_restore -h localhost -U postgres -F c -d name_db bank.tar.gz
Перед восстановлением необходимо создать базу данных name_db в postgresql


Cозданиt backup-а через консоль 
pg_dump -h localhost -U postgres -F c -f bank.tar.gz bank 