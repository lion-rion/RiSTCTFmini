# RiSTCTFmini

![](https://github.com/lion-rion/RiSTCTFmini/workflows/Docker%20compose%20test/badge.svg)

This is a beginner's CTF question created for the department's CTF. The second half of the course is designed for intermediate players as well.

部内 CTF のために作成した初心者向け CTF 問題です。後半は中級者でも楽しめる内容になっています

## Port

| name | role                 | host | container |
| ---- | -------------------- | ---- | --------- |
| app  | Web server & backend | 8001 | 80        |
| db   | Database             | 3306 | 20002     |

## Usage

clone and start.

```
git clone https://github.com/lion-rion/RiSTCTFmini.git
cd RiSTCTFmini/build
docker compose up -d
```

then, access http://localhost:8081/\* on your computer.
