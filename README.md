# Symfony Micro Kernel
This is an example implementation that uses the Symfony MicroKernelTrait, which allows a minimal project size, and custom directory structure.

## Getting Started
To get started, you simply need to clone the repository into a new directory.
```bash
$ git clone https://github.com/robmeijer/SymfonyMicroKernel.git
```
## Configuration
Next, copy the `.env.example` file to `.env` and update it.
```bash
SECRET=ThisTokenIsNotSoSecretChangeIt
SYMFONY_DEBUG=1
SYMFONY_ENV=dev
```
## Browse The Application
You can use PHP's built-in server to start the application.

From the root of your project directory, type the following:
```bash
$ php -S 127.0.0.1:8888 -t public
```
Then, open http://127.0.0.1:8888 in your browser.
