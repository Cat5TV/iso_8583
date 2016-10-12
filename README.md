# montrans

Translate common response codes from the Moneris Payment Processor API response to plain English text.

**Currently supports:**
- getISO()
- getCardType()

**Additional Options**
- null2null() - by wrapping your Moneris API calls in this function, you will correct the issue where the API returns the values "null" and "false" as opposed to the expected responses *null* and *false*.
