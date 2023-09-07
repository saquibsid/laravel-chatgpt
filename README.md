1. Create your api-key on chat-gpt site:
    # https://platform.openai.com/

2. Copy .env.example file and create new with .env

3. Replace the following keys value in the env file
    # DB_DATABASE=yourdbname
    # DB_USERNAME=dbusername(root for eg.)
    # DB_PASSWORD=your db password if any otherwise leave it blank
    # CHAT_GPT_API_KEY=yourchatgptapi key 

4. Run the composer update to install all the dependencies.

5. Run npm install to install all the packages releated vue.

6. Run the migration command 
    php artisan:migrate
