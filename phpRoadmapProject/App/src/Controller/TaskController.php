<?php


namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TaskController extends AbstractController
{
    /**
     * Creates a new task entity.
     *
     * @Route("/task", name="task.create", methods={"GET", "POST"})
     *
     *
     * @return RedirectResponse|Response
     */
    public function new(): Response
    {
        // creates a task object and initializes some data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createForm(TaskType::class, $task);

        return $this->render('test/test.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}