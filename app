version: '3'
services:
  helloworld:
    image: test
    ports:
      - 80:80
    networks:
     - public
    deploy:
      replicas: 20
      labels:
        - "traefik.enable=true"
networks:
  public:
#    external: true
