# Soham Seva Group (SSG)

NGO portal for community service, education, medical aid, volunteering, and donor engagement.

## Features
- **Online Donation Flow**: Interactive donation form with activity selection, simulated payment confirmation, and 80G receipt acknowledgment.
- **Volunteer Management**: Application form for passionate contributors.
- **Multilingual Support**: Integrated language translation element.
- **Security Hardening**:
  - Input sanitization and data validation on donation and contact processing.
  - DOM XSS prevention on dynamic SweetAlert notifications.
  - Protected directory indexes and defensive HTTP headers via `.htaccess`.

## Structure
- `public_html/` - PHP pages, assets, includes, and endpoints.
- `public_html/.htaccess` - Production security rules and headers.
