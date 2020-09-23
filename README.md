# LABORATORIO 1
Configurar y usar Git como sistema de control de versiones de un proyecto personal.
## a)	Configurar y usar Git localmente
   En base al siguiente tutorial: http://www.gabrielsaldana.org/platica_git.pdf <br />
   
   Nos situamos en la carpeta en la que queremos trabajar. Nos aseguramos con pwd, para saber dónde estamos.
   Ahora con git init inicializa el repositorio:
   <p>
      <img width="50%" height="50%" src="Imagenes/init.PNG">
   </p>
   
   Agregamos todos los archivos al repositorio.
   <p>
      <img width="50%" height="50%" src="Imagenes/add.PNG">
   </p>
   
   * Realizar cambios
   <p>
      <img width="50%" height="50%" src="Imagenes/commit.PNG">
   </p>
   
   * Crear ramas
   <p>
      <img width="50%" height="50%" src="Imagenes/branch.PNG">
   </p>
   
   * Hacer merges
   <p>
      <img width="50%" height="50%" src="Imagenes/merge.PNG">
   </p>
   
   * Revisar historial
   <p>
      <img width="50%" height="50%" src="Imagenes/log.PNG">
   </p>
   
   * Regresar a la version anterior
   <p>
      <img width="50%" height="50%" src="Imagenes/reset.PNG">
   </p>
   
## b)	Configurar y usar GitHub
   En base al siguiente tutorial: https://www.freecodecamp.org/news/the-beginners-guide-to-git-github/
   ### Tipo 1 : cree el repositorio, clónelo en su PC y trabaje en él (recomendado)
   El tipo 1 implica crear un repositorio totalmente nuevo en GitHub, clonarlo en nuestra computadora, trabajar en nuestro proyecto y rechazarlo.
   * Cree un nuevo repositorio haciendo clic en el botón "nuevo repositorio" en la página web de GitHub.
   * Elija un nombre para su primer repositorio, agregue una pequeña descripción, marque la casilla "Inicializar este repositorio con un README" y haga clic en el botón "Crear     repositorio".
   <p>
      <img width="40%" height="40%" src="Imagenes/uno.PNG">
   </p>
   
   ¡Bien hecho! Se creo su repositorio de GitHub. <br />
   Su primera misión es obtener una copia del repositorio en su computadora. Para hacer eso, necesita "clonar" el repositorio en su computadora. <br />
   * Clonar un repositorio significa que está tomando un repositorio que está en el servidor y lo clona en su computadora, al igual que descargarlo. En la página del repositorio,  debe obtener la dirección "HTTPS".
   <p>
      <img width="40%" height="40%" src="Imagenes/dos.PNG">
   </p>
   
   * Una vez que tenga la dirección del repositorio, debe usar su terminal. Utilice el siguiente comando en su terminal. Cuando esté listo, puede ingresar esto: <br />
   `git clone [HTTPS ADDRESS]`<br />
     Este comando hará una copia local del repositorio alojado en la dirección dada.<br />
     Ahora, su repositorio está en su computadora. Debes moverte en él con el siguiente comando.<br />
     `cd [NAME OF REPOSITORY]`
     <p>
        <img width="40%" height="40%" src="Imagenes/tres.PNG">
     </p>
     
   * Ahora, en la terminal, estás en el directorio de tu repositorio. Hay 4 pasos en un compromiso: ‘status’ , ‘add’ , ‘commit’ and ‘push’. Todos los siguientes pasos deben realizarse dentro de su proyecto. Repasemos uno por uno.
     #### “status”
     Lo primero que debe hacer es verificar los archivos que ha modificado. Para hacer esto, puede escribir el siguiente comando para que aparezca una lista de cambios.
     <p>
        <img width="40%" height="40%" src="Imagenes/github1.PNG">
     </p>
     
     #### “add”
     Con la ayuda de la lista de cambios, puede agregar todos los archivos que desea cargar con el siguiente comando:<br />
     `git add [FILENAME] [FILENAME] [...]`<br />
     En nuestro caso, agregaremos un archivo HTML simple.<br />
     `git add sample.html`
     <p>
        <img width="40%" height="40%" src="Imagenes/github2.PNG">
     </p>     
     
     #### “commit”
     Ahora que hemos agregado los archivos de nuestra elección, necesitamos escribir un mensaje para explicar lo que hemos hecho. Este mensaje puede resultar útil más adelante si queremos consultar el historial de cambios. Aquí tienes un ejemplo de lo que podemos poner en nuestro caso.<br />
     `git commit -m "Added sample HTML file that contain basic syntax"`<br />
     <p>
        <img width="40%" height="40%" src="Imagenes/github3.PNG">
     </p>  
     
     #### “push”
     Ahora podemos poner nuestro trabajo en GitHub. Para hacer eso, tenemos que "push" nuestros archivos a Remote. Remote es una instancia duplicada de nuestro repositorio que vive en otro lugar de un servidor remoto. Para hacer esto, debemos saber el nombre del remote control (en su mayoría remoto se llama origin). Para averiguar ese nombre, escriba el siguiente comando.<br />
     `git remote`<br />
     <p>
        <img width="40%" height="40%" src="Imagenes/github4.PNG">
     </p>  
     
     Como puede ver en la imagen de arriba, el nombre de nuestro remote control es origin. Ahora podemos "push" nuestro trabajo de forma segura con el siguiente comando.<br />
     `git push origin master`<br />
     <p>
        <img width="40%" height="40%" src="Imagenes/github5.PNG">
     </p>  
     
     Ahora, si vamos a nuestro repositorio en la página web de GitHub, podemos ver el archivo sample.html que hemos enviado al remote control: ¡GitHub!<br />
     <p>
        <img width="40%" height="40%" src="Imagenes/github6.PNG">
     </p>  
   ### Tipo 2: Trabaje en su proyecto localmente, luego cree el repositorio en GitHub y envíelo a remote control .
   El tipo 2 le permite crear un repositorio nuevo desde una carpeta existente en nuestra computadora y enviarlo a GitHub. En muchos casos, es posible que ya haya creado algo en su computadora que desee convertir repentinamente en un repositorio en GitHub.<br />
   Por defecto, cualquier directorio de nuestra computadora no es un repositorio de Git, pero podemos convertirlo en un repositorio de Git.<br />
   Después de convertir nuestro directorio a un repositorio de Git, lo primero que debemos hacer es verificar los archivos que tenemos.<br />
   Entonces, hay  archivos en ese directorio que necesitamos "add" a nuestro Repo.<br />
   NOTA: Para "add" todos los archivos en nuestro Repositorio podemos usar el siguiente comando:<br />
   `git add .`<br />
   Una vez que se completa el área de preparación (el proceso de adición), podemos verificar si los archivos se agregaron correctamente o no ejecutando el estado de git<br />
   Si esos archivos en particular están en verde , ¡ha hecho su trabajo!
   Entonces tenemos que "commit" con una descripción en ella.<br />
   <p>
      <img width="40%" height="40%" src="Imagenes/github9.PNG">
   </p>    
   
   Entonces, para agregar ese remote contro, primero tenemos que ir a GitHub. Cree un nuevo repositorio y asígnele el nombre que desee para almacenarlo en GitHub. Luego haga clic en el botón "Crear repositorio".<br />
   NOTA: En el Tipo 2, no inicialice el repositorio con un archivo README cuando cree un nuevo repositorio en la página web de GitHub.<br />
   <p>
      <img width="40%" height="40%" src="Imagenes/github7.PNG">
   </p>  
   
   Después de hacer clic en el botón "Crear repositorio", encontrará la siguiente imagen como una página web.
   <p>
      <img width="40%" height="40%" src="Imagenes/github8.PNG">
   </p> 

   Copie la dirección HTTPS. Ahora crearemos el remote control para nuestro repositorio.<br />
   `git remote add origin [HTTPS ADDRESS]`<br />
   Después de ejecutar este comando, podemos verificar si hemos agregado exitosamente el control remoto o no mediante el siguiente comando.<br />
   `git remote`<br />
   Y si genera "origin", ha agregado el control remoto a su proyecto.<br />
   ¡Ahora podemos enviar nuestro proyecto a GitHub sin ningún problema!<br />
   `git push origin master`<br />
   <p>
      <img width="40%" height="40%" src="Imagenes/github10.PNG">
   </p> 
   
   Después de completar estos pasos uno por uno, si vas a GitHub puedes encontrar tu repositorio con los archivos.
   
