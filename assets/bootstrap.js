import { startStimulusApp } from '@symfony/stimulus-bundle';
import login_controller from './controllers/login_controller.js';
import theme_controller from './controllers/theme_controller.js';

const app = startStimulusApp();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

app.register('login', login_controller);
app.register('theme', theme_controller);