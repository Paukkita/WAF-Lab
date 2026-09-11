# 🛡️ WAF-Lab-OWASP

Laboratorio de ciberseguridad para implementar un **Web Application Firewall (WAF)** y proteger una aplicación web desarrollada con Laravel.

## 📌 Objetivo

Implementar una infraestructura donde el tráfico hacia la aplicación pase previamente por un WAF, permitiendo detectar y bloquear ataques web.

## 🔧 Tecnologías

- Docker / Docker Compose
- Nginx
- ModSecurity / OWASP CRS
- Laravel
- MySQL
- Wazuh
- Kali Linux

## 🚀 Desarrollo

1. Crear una aplicación web sencilla con **Laravel + MySQL**.
2. Contenerizar la aplicación mediante **Docker Compose**.
3. Configurar **Nginx como WAF y reverse proxy**.
4. Integrar **ModSecurity + OWASP CRS**.
5. Realizar pruebas de **SQL Injection, XSS y Path Traversal** desde Kali Linux.
6. Analizar los logs generados por el WAF.
7. Crear y ajustar **reglas personalizadas**.
8. Integrar los logs con **Wazuh** para generar alertas.
9. Analizar posibles **falsos positivos** y ajustar la configuración.
10. Documentar las pruebas y resultados.

