
<h3 id="sendtelegram">SendTelegram()</h3>

<p>Функция для отправки сообщения в телеграмм. На сайте дожен быть подключен https.<br/>
Принимает три параметра (токен бота, id чата и сообщение)<br/>
Документация <a href="https://core.telegram.org/bots/api">telegram api</a> <br/>
Инструкция по настройке бота <a href="https://wpdew.com/plyushki/php/kak-svyazat-formu-na-sajte-s-telegram/">wpdew.com</a></p>
</p>

<ul>
  <li>$botToken <code class="language-plaintext highlighter-rouge">*</code> </li>
  <li>$chatId <code class="language-plaintext highlighter-rouge">*</code> </li>
  <li>$message <code class="language-plaintext highlighter-rouge">*</code></li>
</ul>

<p>Example:</p>

<div class="language-html highlighter-rouge">
    <div class="highlight">
<pre class="highlight"><code>
    <span class="na">SendTelegram($botToken, $chatId, $message);</span>
  </code></pre>
    </div>
</div>







<h3 id="getuserip">getUserIpAddr()</h3>

<p>Функция определения ip пользователя.</p>

<ul>
    <li>Входящих параметров нет</li>
</ul>

<p>Example:</p>

<div class="language-html highlighter-rouge">
    <div class="highlight">
<pre class="highlight"><code>
    <span class="na">getUserIpAddr();</span>
  </code></pre>
    </div>
</div>








<h3 id="translate">translate()</h3>

<p>Дополнительная функция для перевода конфигурационных файлов на лету.</p>

<ul>
<li>app <code class="language-plaintext highlighter-rouge">*</code> путь к файлу перевода</li>
<li>string <code class="language-plaintext highlighter-rouge">*</code> строка перевода </li>
</ul>

<p>Example:</p>

<div class="language-html highlighter-rouge">
    <div class="highlight">
<pre class="highlight"><code>
    <span class="na">&lcub;&lcub;@translate('app','string')&rcub;&rcub;</span>
  </code></pre>
    </div>
</div>






<h3 id="esc_html">esc_html()</h3>

<p>esc_html - Преобразует специальные символы в HTML-сущности</p>

<ul>
<li>string <code class="language-plaintext highlighter-rouge">*</code> строка перевода </li>
</ul>

<p>Example:</p>

<div class="language-html highlighter-rouge">
    <div class="highlight">

<pre class="highlight"><code>
    <span class="na">esc_html('string');</span>
  </code></pre>
    </div>
</div>






<h3 id="get_home_url">get_home_url()</h3>

<p>get_home_url - Получает адрес установки</p>

<ul>
<li>входних параметров нету</li>
</ul>

<p>Example: <i>{{ get_home_url() }}</i></p>

<div class="language-html highlighter-rouge">
    <div class="highlight">
<pre class="highlight"><code>
    <span class="na">get_home_url();</span>
  </code></pre>
    </div>
</div>





<h3 id="get_template_directory_uri">get_template_directory_uri()</h3>

<p>get_template_directory_uri - получает адрес темы</p>
<ul>
    <li>string <code class="language-plaintext highlighter-rouge">*</code> папка темы </li>
</ul>
<p>Example: <i>{{ get_template_directory_uri('default') }}</i></p>
<div class="language-html highlighter-rouge">
    <div class="highlight">

<pre class="highlight"><code>
    <span class="na">get_template_directory_uri('string');</span>
  </code></pre>
    </div>
</div>






<h3 id="get_template_directory">get_template_directory()</h3>

<p>get_template_directory - получает директорию темы</p>
<ul>
    <li>string <code class="language-plaintext highlighter-rouge">*</code> папка темы </li>
</ul>
<p>Example: <i>{{ get_template_directory('default') }}</i></p>
<div class="language-html highlighter-rouge">
    <div class="highlight">

<pre class="highlight"><code>
    <span class="na">get_template_directory('string');</span>
  </code></pre>
    </div>
</div>
