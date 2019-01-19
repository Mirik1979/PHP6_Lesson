{% include 'header.html' %}
    
    <!-- Основной блок -->
    <div class="main">
    
    <!-- Левый блок -->
    <div class="left">
        
        <!-- Меню -->
	{% include 'menu.html' %}
        
        <div class="open">
            <p>now<br>is<br>open!</p>
        </div>
        
    </div>
        
    <!-- Правый блок -->
    <div class="right">
        <span>Сделанные заказы</span> 
        {% include 'orders.html' %}	
    </div>     
    
    </div>
	{% include 'footer.html' %} 
</body>
    
</html>