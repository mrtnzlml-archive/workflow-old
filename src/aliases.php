<?php

/**
 * This file is here only because of BC changes - use Adeira packages instead (https://github.com/adeira).
 */

class_alias(\Adeira\Bridges\WorkflowDI\WorkflowExtension::class, \Mrtnzlml\Bridges\WorkflowDI\WorkflowExtension::class);
class_alias(\Adeira\Workflow\Exceptions\LogicException::class, \Mrtnzlml\Workflow\Exceptions\LogicException::class);
class_alias(\Adeira\Workflow\Activity::class, \Mrtnzlml\Workflow\Activity::class);
class_alias(\Adeira\Workflow\Transition::class, \Mrtnzlml\Workflow\Transition::class);
class_alias(\Adeira\Workflow\TStrict::class, \Mrtnzlml\Workflow\TStrict::class);
class_alias(\Adeira\Workflow\Workflow::class, \Mrtnzlml\Workflow\Workflow::class);
