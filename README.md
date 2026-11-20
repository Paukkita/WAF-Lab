# 🛡️ WAF-Lab-OWASP

Laboratorio práctico centrado en la implementación y configuración de un **Web Application Firewall (WAF)** para proteger una aplicación web frente a diferentes tipos de ataques. El entorno permite comprobar cómo el WAF inspecciona las peticiones HTTP y detecta o bloquea solicitudes potencialmente maliciosas.

## 📌 Objetivo

Diseñar e implementar una infraestructura donde el tráfico hacia una aplicación web sea inspeccionado por un WAF, utilizando **ModSecurity y OWASP Core Rule Set (CRS)** para detectar y bloquear ataques como SQL Injection, XSS y Path Traversal.

## 🔧 Tecnologías

- Docker / Docker Compose
- Nginx
- ModSecurity / OWASP CRS
- Laravel
- MySQL
- Kali Linux

## 🚀 Desarrollo

1. Crear una aplicación web sencilla con **Laravel + MySQL**.
2. Contenerizar la aplicación mediante **Docker Compose**.
3. Configurar **Nginx como reverse proxy**.
4. Implementar **ModSecurity + OWASP CRS** como WAF.
5. Realizar pruebas controladas de seguridad desde **Kali Linux**.
6. Comprobar la detección y el bloqueo de peticiones maliciosas.
7. Analizar los logs generados y ajustar la configuración del WAF.
8. Documentar las pruebas y los resultados obtenidos.
