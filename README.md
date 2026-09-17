# 🛡️ WAF-Lab-OWASP

Laboratorio práctico de ciberseguridad web centrado en la implementación y configuración de un Web Application Firewall (WAF) para proteger una aplicación web frente a diferentes tipos de ataques. El entorno permite realizar pruebas controladas y analizar cómo el WAF detecta, bloquea y registra peticiones maliciosas.

## 📌 Objetivo

Diseñar una infraestructura donde el tráfico hacia la aplicación sea inspeccionado por el WAF, permitiendo detectar, bloquear y registrar ataques como SQL Injection, XSS y Path Traversal. Además, se analizarán los logs generados y se integrarán con Wazuh para la generación de alertas y monitorización de eventos de seguridad.

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

