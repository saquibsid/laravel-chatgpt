1. Create your api-key on chat-gpt site:
    <a href="https://platform.openai.com/">Create Api Key</a>

2. Copy .env.example file and create new with .env

3. Replace the following keys value in the env file<br/>
    <p>DB_DATABASE=yourdbname</p>
    <p>DB_USERNAME=dbusername(root for eg.)</p>
    <p>DB_PASSWORD=your db password if any otherwise leave it blank</p>
    <p>CHAT_GPT_API_KEY=yourchatgptapi key</p> 

4. Run the composer update to install all the dependencies.

5. Run npm install to install all the packages releated vue.

6. Run the migration command 
    php artisan:migrate
