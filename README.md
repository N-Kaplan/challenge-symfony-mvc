# challenge-symfony-mvc
Introduction to Symfony as part of the BeCode training.
Instructions [here](https://github.com/becodeorg/ANT-Lamarr-5.34/tree/main/3.The-Mountain/Symfony/1.MVC-routing)

### 10 Jan 2022: Struggling with the following:
 - updating PHP version with XAMPP
 - downloading symfony CLI (resolved: via GoFish)
 - setting up the vhost (403 Forbidden: You don't have permission to access this resource.)
 - Creating and displaying a form. Resolution:
    - create user entity (command: make:entity)
    - in Controller: define form ($this->createFormBuilder($user)
    - handle request (which is a parameter): $form->handleRequest($request);
    - in twig file: {{form(form)}}

### 11 Jan 20200: 
 - Main difficulty: separating changeMyName and showMyName methods.
     - Resolution: user Symfony's Form (terminal command: ```php bin/console make:form```) rather than CreateFormBuilder.