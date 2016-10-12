<?php
  function iso_8583($code,$type='resp') {
    if ($type == 'resp') {
      // Return the textual representation of what a provided ISO 8583 Response Code means.
      // See https://en.wikipedia.org/wiki/ISO_8583#Response_code
      // By Robbie Ferguson -- http://baldnerd.com
			switch ($code) {
				case '00':
					$resp = 'Successful approval/completion or that V.I.P. PIN verification is valid';
					break;
				case '01':
					$resp = 'Refer to card issuer';
					break;
				case '02':
					$resp = 'Refer to card issuer, special condition';
					break;
				case '03':
					$resp = 'Invalid merchant or service provider';
					break;
				case '04':
					$resp = 'Pickup card';
					break;
				case '05':
					$resp = 'Do not honor';
					break;
				case '06':
					$resp = 'Error';
					break;
				case '07':
					$resp = 'Pickup card, special condition (other than lost/stolen card)';
					break;
				case '10':
					$resp = 'Partial Approval';
					break;
				case '11':
					$resp = 'V.I.P. approval';
					break;
				case '12':
					$resp = 'Invalid transaction';
					break;
				case '13':
					$resp = 'Invalid amount (currency conversion field overflow) or amount exceeds maximum for card program';
					break;
				case '14':
					$resp = 'Invalid account number (no such number)';
					break;
				case '15':
					$resp = 'No such issuer';
					break;
				case '17':
					$resp = 'Customer cancellation';
					break;
				case '19':
					$resp = 'Re-enter transaction';
					break;
				case '20':
					$resp = 'Invalid response';
					break;
				case '21':
					$resp = 'No action taken (unable to back out prior transaction)';
					break;
				case '22':
					$resp = 'Suspected Malfunction';
					break;
				case '25':
					$resp = 'Unable to locate record in file, or account number is missing from the inquiry';
					break;
				case '28':
					$resp = 'File is temporarily unavailable';
					break;
				case '30':
					$resp = 'Format Error';
					break;
				case '41':
					$resp = 'Pickup card (lost card)';
					break;
				case '43':
					$resp = 'Pickup card (stolen card)';
					break;
				case '51':
					$resp = 'Insufficient funds';
					break;
				case '52':
					$resp = 'No checking account';
					break;
				case '53':
					$resp = 'No savings account';
					break;
				case '54':
					$resp = 'Expired card';
					break;
				case '55':
					$resp = 'Incorrect PIN';
					break;
				case '57':
					$resp = 'Transaction not permitted to cardholder';
					break;
				case '58':
					$resp = 'Transaction not allowed at terminal';
					break;
				case '59':
					$resp = 'Suspected fraud';
					break;
				case '61':
					$resp = 'Activity amount limit exceeded';
					break;
				case '62':
					$resp = 'Restricted card (for example, in Country Exclusion table)';
					break;
				case '63':
					$resp = 'Security violation';
					break;
				case '65':
					$resp = 'Activity count limit exceeded';
					break;
				case '68':
					$resp = 'Response received too late';
					break;
				case '75':
					$resp = 'Allowable number of PIN-entry tries exceeded';
					break;
				case '76':
					$resp = 'Unable to locate previous message (no match on Retrieval Reference number)';
					break;
				case '77':
					$resp = 'Previous message located for a repeat or reversal, but repeat or reversal data are inconsistent with original message';
					break;
				case '78':
					$resp = '’Blocked, first used’—The transaction is from a new cardholder, and the card has not been properly unblocked.';
					break;
				case '80':
					$resp = 'Visa transactions: credit issuer unavailable. Private label and check acceptance: Invalid date';
					break;
				case '81':
					$resp = 'PIN cryptographic error found (error found by VIC security module during PIN decryption)';
					break;
				case '82':
					$resp = 'Negative CAM, dCVV, iCVV, or CVV results';
					break;
				case '83':
					$resp = 'Unable to verify PIN';
					break;
				case '85':
					$resp = 'No reason to decline a request for account number verification, address verification, CVV2 verification, or a credit voucher or merchandise return';
					break;
				case '91':
					$resp = 'Issuer unavailable or switch inoperative (STIP not applicable or available for this transaction)';
					break;
				case '92':
					$resp = 'Destination cannot be found for routing';
					break;
				case '93':
					$resp = 'Transaction cannot be completed, violation of law';
					break;
				case '94':
					$resp = 'Duplicate Transmission';
					break;
				case '95':
					$resp = 'Reconcile error';
					break;
				case '96':
					$resp = 'System malfunction, System malfunction or certain field error conditions';
					break;
				case 'B1':
					$resp = 'Surcharge amount not permitted on Visa cards (U.S. acquirers only)';
					break;
				case 'N0':
					$resp = 'Force STIP';
					break;
				case 'N3':
					$resp = 'Cash service not available';
					break;
				case 'N4':
					$resp = 'Cashback request exceeds issuer limit';
					break;
				case 'N7':
					$resp = 'Decline for CVV2 failure';
					break;
				case 'P2':
					$resp = 'Invalid biller information';
					break;
				case 'P5':
					$resp = 'PIN Change/Unblock request declined';
					break;
				case 'P6':
					$resp = 'Unsafe PIN';
					break;
				case 'Q1':
					$resp = 'Card Authentication failed';
					break;
				case 'R0':
					$resp = 'Stop Payment Order';
					break;
				case 'R1':
					$resp = 'Revocation of Authorization Order';
					break;
				case 'R3':
					$resp = 'Revocation of All Authorizations Order';
					break;
				case 'XA':
					$resp = 'Forward to issuer';
					break;
				case 'XD':
					$resp = 'Forward to issuer';
					break;
				case 'Z3':
					$resp = 'Unable to go online';
					break;
				default:
					$resp = 'Unknown response received.';
					break;
			}
		}
		return $resp;
	}
?>
