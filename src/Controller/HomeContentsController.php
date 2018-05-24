<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HomeContents Controller
 *
 * @property \App\Model\Table\HomeContentsTable $HomeContents
 *
 * @method \App\Model\Entity\HomeContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeContentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $homeContents = $this->paginate($this->HomeContents);

        $this->set(compact('homeContents'));
    }

    /**
     * View method
     *
     * @param string|null $id Home Content id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeContent = $this->HomeContents->get($id, [
            'contain' => []
        ]);

        $this->set('homeContent', $homeContent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeContent = $this->HomeContents->newEntity();
        if ($this->request->is('post')) {
            $homeContent = $this->HomeContents->patchEntity($homeContent, $this->request->getData());
            if ($this->HomeContents->save($homeContent)) {
                $this->Flash->success(__('The home content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home content could not be saved. Please, try again.'));
        }
        $this->set(compact('homeContent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeContent = $this->HomeContents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeContent = $this->HomeContents->patchEntity($homeContent, $this->request->getData());
            if ($this->HomeContents->save($homeContent)) {
                $this->Flash->success(__('The home content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home content could not be saved. Please, try again.'));
        }
        $this->set(compact('homeContent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeContent = $this->HomeContents->get($id);
        if ($this->HomeContents->delete($homeContent)) {
            $this->Flash->success(__('The home content has been deleted.'));
        } else {
            $this->Flash->error(__('The home content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
