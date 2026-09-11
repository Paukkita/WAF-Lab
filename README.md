# 🛡️ WAF-Lab-OWASP

Laboratorio práctico de ciberseguridad orientado a la **implementación y configuración de un Web Application Firewall (WAF)** para proteger una aplicación web frente a diferentes tipos de ataques.

## 📌 Objetivo

Diseñar una infraestructura en la que el tráfico hacia la aplicación sea inspeccionado previamente por el WAF, permitiendo **detectar, bloquear y registrar peticiones maliciosas**, así como analizar los eventos de seguridad y ajustar las reglas de protección.

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

