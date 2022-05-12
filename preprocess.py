def pre_process(corpus):
  processedText = []

  USER_REGEX = '\@user'
  PUNCTUATION_REGEX = '[^\w\s]'

  for tweet in corpus:
    # Lowercase all text.
    tweet = tweet.lower()
    # Remove any punctuation.
    tweet = re.sub(PUNCTUATION_REGEX,'', tweet)
    # Remove any Unicode by converting to ASCII. (Emoji & Non-English characters)
    tweet = tweet.encode('ascii', errors='ignore')
    tweet = tweet.decode()

    # Tokenization & removing 'stop words'
    tweet = tokenization_and_simplification(tweet)
    processedText.append(tweet)

  return processedText

print("=== Before pre-processing ===")
print(train.head)

# Apply pre-processing to data.
train['cleaned_tweet'] = pre_process(train['tweet'])

print("\n=== After pre-processing ===")
print(train.head)