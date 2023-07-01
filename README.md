## Hướng dẫn build

1. Cài docker và docker compose trong server như hướng dẫn dưới
Docker																
	$ apt update															
	$ apt-get remove docker docker-engine docker.io															
	$ apt install docker.io															
	$ docker --version															
	$ systemctl start docker															
	$ systemctl enable docker															
	$ systemctl status docker															
Docker composer																
	$ curl -SL https://github.com/docker/compose/releases/download/v2.4.1/docker-compose-linux-x86_64 -o /usr/local/bin/docker-compose															
	$ chmod +x /usr/local/bin/docker-compose															
	$ ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose															
	$ docker-compose --version

2. Trong docker-compose.yml sửa app.environment.APP_URL = domain hoặc ip tĩnh tương ứng của server đang sử dụng để hiển thị web
3. Chạy docker-compose up -d --build
