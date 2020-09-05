用松散耦合的方式来更好的实现可测试、可维护和可扩展的代码。

依赖注入模式：依赖注入（Dependency Injection）是控制反转（Inversion of Control）的一种实现方式。要实现控制反转，通常的解决方案是将创建被调用者实例的工作交由 IoC 容器来完成，然后在调用者中注入被调用者（通过构造器 / 方法注入实现），这样我们就实现了调用者与被调用者的解耦，该过程被称为依赖注入。

DatabaseConfiguration 被注入 DatabaseConnection 并获取所需的 $config 。如果没有依赖注入模式， 配置将直接创建 DatabaseConnection 。这对测试和扩展来说很不好。