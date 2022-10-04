FROM alpine

RUN apk add --no-cache \
    npm \
	&& npm install -g http-server

VOLUME /app
WORKDIR /app

COPY ./ /app
EXPOSE 8080

CMD ["http-server", "-p", "8080"]
