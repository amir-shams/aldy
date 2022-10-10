1:

git clone https://github.com/mattermost/docker && cd docker

2:

cp env.example .env | and edite .env

3:

set domain :

DOMAIN=mm.example.com


4:

create folder and chown 2000:

mkdir -p ./volumes/app/mattermost/{config,data,logs,plugins,client/plugins,bleve-indexes} && sudo chown -R 2000:2000 ./volumes/app/mattermost

5:

docker-compose up wityhout nginx:

sudo docker-compose -f docker-compose.yml -f docker-compose.without-nginx.yml up -d
