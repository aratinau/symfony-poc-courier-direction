# Symfony POC Courier Direction

## Start project

`dockerup "docker-compose up -d"`

`symfony server:start`

## Stop project

`dockerdown "docker-compose down"`


POST /courier_incomings

```json
{
    "expediteur": "string",
    "description": "string"
}
```

POST /courier_outcomings

```json
{
    "destinataire": "string",
    "description": "string"
}
```

GET /couriers

```json
{
    "@context": "/api/contexts/Courier",
    "@id": "/api/couriers",
    "@type": "hydra:Collection",
    "hydra:totalItems": 2,
    "hydra:member": [
        {
            "@id": "/api/courier_incomings/24",
            "@type": "CourierIncoming",
            "expediteur": "string",
            "description": "string",
            "date": "2023-04-08T18:52:24+00:00"
        },
        {
            "@id": "/api/courier_outcomings/25",
            "@type": "CourierOutcoming",
            "destinataire": "string",
            "description": "string",
            "date": "2023-04-08T18:52:24+00:00"
        }
    ]
}
```
