from Crypto.Util.number import bytes_to_long, long_to_bytes, getPrime


# Generate a random large prime (should ALWAYS be kept PRIVATE)
p = 857504083339712752489993810777
# Generate a random large prime (should ALWAYS be kept PRIVATE)
q = 1029224947942998075080348647219
N = 882564595536224140639625987659416029426239230804614613279163
print("N:", N)  # Print PUBLIC value N

# Compute PUBLIC  value N from PRIVATE primes p and q
# Compute PRIVATE totient function of N from PRIVATE primes p and q
totient = (p-1)*(q-1)
# Choose  PUBLIC  key e such that 1 < e < totient and gcd(e, totient) == 1, common value is 65537
e = 65537
# Compute PRIVATE key d as the inverse of e given the PRIVATE totient
d = pow(e, -1, totient)

# Prepare message
message = b"QUESTCON{1_HaT3_RS1}"   # Message bytes to encrypt
# Transform bytes to a number (long) so that we can apply RSA
message = bytes_to_long(message)

# Encryption
ciphertext = pow(message, e, N)  # Encrypt message using PUBLIC values e and N
print("Ciphertext:", ciphertext)  # Print ciphertext
# Decryption
# plaintext = pow(ciphertext, d, N)    # Decrypt ciphertext using PRIVATE key d
# plaintext = long_to_bytes(plaintext)  # Transform number back to bytes
# print("Plaintext:", plaintext)  # Print plaintext
