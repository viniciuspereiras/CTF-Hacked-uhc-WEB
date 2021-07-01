# CTF-Hacked-uhc-WEB
- A machine that I made for UHCv33 
- The priv esc is a DockerEscape for the host, so the host will be your machine :)
- Official WriteUP -> https://www.notion.so/UHCV33-Classificat-ria-Web-Official-Write-Up-Hacked-873289be05e84bb2a6c944b89409faa7
# To start:
```bash 
docker build -t hacked .
sudo docker run -dp 80:80 hacked --privileged
```
