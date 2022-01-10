# challenge-symfony-mvc
Introduction to Symfony.

### 10 Jan 2022: Struggling with the following:
 - updating PHP version with XAMPP
 - downloading symfony CLI (resolved: via GoFish)
 - setting up the vhost (403 Forbidden: You don't have permission to access this resource.)
 - Creating and displaying a form. Resolution:
    - create user entity (command: make:entity)
    - in Controller: define form ($this->createFormBuilder($user)
    - handle request (which is a parameter): $form->handleRequest($request);
    - in twig file: {{form(form)}}