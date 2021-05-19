# Mini Aspire

# Steps to run  the project

- Clone the Repo
- Run php artisan migrate
- Run php atisan serve

# Register User Endpoint (POST /api/register)
| Field | Type |
| ------ | ------ |
| email | Unique Email address |
| name | String|
| password | String |
| password_confirmation | String |

```sh
Sample Response
{
    "user": {
        "name": "Altamash",
        "email": "altu9595@gmail.com",
        "updated_at": "2021-05-19 17:56:31",
        "created_at": "2021-05-19 17:56:31",
        "id": 2
    },
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjMyM2NmOGY2MWFmOTBmZmVmOWVmOTJkNTkzYjE0NGU4YTkyMGZmM2Q0YzFkYmE4OWM4NTgyMjg0NTBhMjFiZDk3ZmY5NGQ3MmFlMWQ1OTkzIn0.eyJhdWQiOiIxIiwianRpIjoiMzIzY2Y4ZjYxYWY5MGZmZWY5ZWY5MmQ1OTNiMTQ0ZThhOTIwZmYzZDRjMWRiYTg5Yzg1ODIyODQ1MGEyMWJkOTdmZjk0ZDcyYWUxZDU5OTMiLCJpYXQiOjE2MjE0NDY5OTEsIm5iZiI6MTYyMTQ0Njk5MSwiZXhwIjoxNjUyOTgyOTkxLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.Oo8m1IlsXUvrPcFD2DBFdPn2iNFdBJMEDmgP3rJOk384Qd8HMPMuvjVq1V8fIzNNLOWuHnvHrznCJKkV9T_84kHDbbo-ktgGmaUcyevqlL6un9xawzCoKvIBdY-_owqs5Pgw5Hoxj0Kbwy8uMPmk5J-pAz0j_aCqfV1K10lll5xV7RoGUh1hGKnhaYORRIWcAXwIasi04neF559_rdsbEppIBlGIQZbhw_OafuYrt6LAaXnBXLpT2O4lIhP4UFvIa3eXQS73U-HtLkt187NECBj2VGVjBxqfnlaMoeks-J0aC86D2oeXcV73yrNe3EM0zhJE-Wu9mgqfFPTUovbqDtoyZ8gQ0m-REhUCo8NnSi7p6HcRf5uK8iCCQ33F-1OEYa4X7o3bXndtxIOMLYoosAuxxoKygGMA5ecnrz2GQlr0Q_7IG89PB71QTrzsMKlXGjbG8RprDMjTDMlYJZsK3VT6vaDqpEK-YKtihaII2tJbGq5HcNHwDqF-1H79nXuoCLUlz5yO2GYOih8qeV2WrDlR8z68bW-KrmjWe2mlB6-USMloFgU8G54e-BdmoLiFYgs5Ub2oT2yFcuA5SPHHRNs29CCdMC1gfaxdsRlMOZsxxzgj5A4MAxiPjmaxBlvHaPQnhwjevL90gqof4WHLH77xrCHe36Vz4eNcuMzxHuE"
}
```

# Login Endpoint (POST /api/login)
| Field | Type |
| ------ | ------ |
| email | Email address |
| password | String |

```sh
Sample Response
{
    "user": {
        "name": "Altamash",
        "email": "altu9595@gmail.com",
        "updated_at": "2021-05-19 17:56:31",
        "created_at": "2021-05-19 17:56:31",
        "id": 2
    },
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjMyM2NmOGY2MWFmOTBmZmVmOWVmOTJkNTkzYjE0NGU4YTkyMGZmM2Q0YzFkYmE4OWM4NTgyMjg0NTBhMjFiZDk3ZmY5NGQ3MmFlMWQ1OTkzIn0.eyJhdWQiOiIxIiwianRpIjoiMzIzY2Y4ZjYxYWY5MGZmZWY5ZWY5MmQ1OTNiMTQ0ZThhOTIwZmYzZDRjMWRiYTg5Yzg1ODIyODQ1MGEyMWJkOTdmZjk0ZDcyYWUxZDU5OTMiLCJpYXQiOjE2MjE0NDY5OTEsIm5iZiI6MTYyMTQ0Njk5MSwiZXhwIjoxNjUyOTgyOTkxLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.Oo8m1IlsXUvrPcFD2DBFdPn2iNFdBJMEDmgP3rJOk384Qd8HMPMuvjVq1V8fIzNNLOWuHnvHrznCJKkV9T_84kHDbbo-ktgGmaUcyevqlL6un9xawzCoKvIBdY-_owqs5Pgw5Hoxj0Kbwy8uMPmk5J-pAz0j_aCqfV1K10lll5xV7RoGUh1hGKnhaYORRIWcAXwIasi04neF559_rdsbEppIBlGIQZbhw_OafuYrt6LAaXnBXLpT2O4lIhP4UFvIa3eXQS73U-HtLkt187NECBj2VGVjBxqfnlaMoeks-J0aC86D2oeXcV73yrNe3EM0zhJE-Wu9mgqfFPTUovbqDtoyZ8gQ0m-REhUCo8NnSi7p6HcRf5uK8iCCQ33F-1OEYa4X7o3bXndtxIOMLYoosAuxxoKygGMA5ecnrz2GQlr0Q_7IG89PB71QTrzsMKlXGjbG8RprDMjTDMlYJZsK3VT6vaDqpEK-YKtihaII2tJbGq5HcNHwDqF-1H79nXuoCLUlz5yO2GYOih8qeV2WrDlR8z68bW-KrmjWe2mlB6-USMloFgU8G54e-BdmoLiFYgs5Ub2oT2yFcuA5SPHHRNs29CCdMC1gfaxdsRlMOZsxxzgj5A4MAxiPjmaxBlvHaPQnhwjevL90gqof4WHLH77xrCHe36Vz4eNcuMzxHuE"
}
```

# Apply for a loan (POST /api/loans)
# Need Auth Bearer token as a header - use the access_token received after login  
| Field | Type |
| ------ | ------ |
| amount | float |
| payment_frequency | String |

```sh
#Sample Response
{
    "loans": {
        "amount": "400",
        "payment_frequency": "weekly",
        "user_id": 1,
        "updated_at": "2021-05-19 18:32:25",
        "created_at": "2021-05-19 18:32:25",
        "id": 4
    },
    "message": "Created successfully"
}
```

# Approve a loan (PUT /api/loans/{1}})
# Need Auth Bearer token as a header - use the access_token received after login 
| Field | Type |
| ------ | ------ |
| approval_status | Integer |

```sh
#Sample Response
{
    "loan": {
        "id": 1,
        "amount": "400",
        "interest": 5,
        "payment_frequency": "weekly",
        "approval_status": "1",
        "user_id": 1,
        "created_at": "2021-05-19 13:51:25",
        "updated_at": "2021-05-19 18:34:44"
    },
    "message": "Updated successfully"
}
```

# Start payment (Post /api/loans/repayment})
# Need Auth Bearer token as a header - use the access_token received after login 
| Field | Type |
| ------ | ------ |
| loan_id | Integer |
| amount | float |

```sh
#Sample Response
{
    "loan": {
        "id": 1,
        "amount": "10",
        "interest": 2,
        "payment_frequency": "weekly",
        "approval_status": "1",
        "user_id": 1,
        "created_at": "2021-05-19 13:51:25",
        "updated_at": "2021-05-19 18:38:22"
    },
    "message": "Updated successfully"
}
```
